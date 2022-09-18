<?php

namespace DidntPot\game\level\gen;

use DidntPot\player\info\replay\data\WorldReplayData;
use DidntPot\PracticeCore;
use JetBrains\PhpStorm\Pure;
use pocketmine\level\generator\GeneratorManager;
use pocketmine\Server;

class PracticeGenManager
{
    const WORLD_TYPES = [
        "type_duel" => true,
        "type_spleef" => true,
        "type_sumo" => true,
        "type_river" => true,
        "type_burnt" => true,
    ];

    /** @var PracticeCore */
    private $core;
    /** @var Server */
    private $server;

    /** @var string[]|array -> Name => Generator */
    private $generators;

    /** @var string[]|array -> Name => WT */
    private $wtGenerators;

    #[Pure] public function __construct(PracticeCore $core)
    {
        $this->core = $core;
        $this->server = $core->getServer();
        $this->generators = [];
        $this->wtGenerators = [];
    }

    /**
     * @param string $type
     * @param string $clazz
     * @param string $worldType
     * @param bool $fps
     *
     * Registers the generator.
     */
    public function registerGenerator(string $type, string $clazz, string $worldType, bool $fps = false): void
    {
        $this->generators[$type] = [$clazz, $fps];
        $this->wtGenerators[$type] = $worldType;
        GeneratorManager::addGenerator($clazz, $type, true);
    }


    /**
     * @param string $type
     * @return string|null
     *
     * Gets the generator class.
     */
    public function getGeneratorClass(string $type): ?string
    {
        if (isset($this->generators[$type])) {
            return $this->generators[$type][0];
        }

        return null;
    }


    /**
     * @param string $clazz
     * @return string|null
     *
     * Gets the generator type.
     */
    public function getGeneratorType(string $clazz): ?string
    {
        foreach ($this->generators as $type => $data) {
            if ($data[0] === $clazz) {
                return $type;
            }
        }

        return null;
    }


    /**
     * @param bool $fps
     * @param string|null $worldType
     * @return array
     *
     * Lists the generators based on world type.
     */
    public function listGenerators(bool $fps = false, string $worldType = null): array
    {
        if ($worldType == null) {
            return $this->generators;
        }

        if (!isset(self::WORLD_TYPES[$worldType])) {
            return $this->generators;
        }

        $unique = array_filter($this->wtGenerators, function (string $wt) use ($worldType) {
            return $wt === $worldType;
        });

        $result = [];

        foreach ($this->generators as $genName => $genData) {
            if (isset($unique[$genName])) {
                if ($fps and boolval($genData[1]) === $fps) {
                    $result[$genName] = $genData[0];
                } elseif (!$fps) {
                    $result[$genName] = $genData[0];
                }
            }
        }

        return $result;
    }
}