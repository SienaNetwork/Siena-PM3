<?php

namespace DidntPot\duels\level\classic;

use DidntPot\utils\Utils;
use JetBrains\PhpStorm\Pure;
use pocketmine\block\BlockIds;
use pocketmine\level\ChunkManager;
use pocketmine\level\generator\Generator;
use pocketmine\level\generator\InvalidGeneratorOptionsException;
use pocketmine\math\Vector3;
use pocketmine\utils\Random;

class ClassicDuelGen extends Generator
{
    protected $level;
    protected $random;
    protected $count;

    // 3 chunks x 3 chunks

    /**
     * @param array $settings
     *
     * @throws InvalidGeneratorOptionsException
     */
    public function __construct(array $settings = [])
    {
    }

    public function init(ChunkManager $level, Random $random): void
    {
        $this->level = $level;
        $this->random = $random;
        $this->count = 0;
    }

    public function generateChunk(int $chunkX, int $chunkZ): void
    {
        if ($this->level instanceof ChunkManager) {
            $chunk = $this->level->getChunk($chunkX, $chunkZ);
            $chunk->setGenerated();

            if ($chunkX % 20 == 0 && $chunkZ % 20 == 0) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($x == 0 or $z == 0) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }
                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 1 && $chunkZ % 20 == 0) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($z == 0) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }
                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 2 && $chunkZ % 20 == 0) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($x == 15 or $z == 0) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }
                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 2 && $chunkZ % 20 == 1) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($x == 15) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }
                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 2 && $chunkZ % 20 == 2) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($x == 15 or $z == 15) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }
                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 0 && $chunkZ % 20 == 1) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($x == 0) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }
                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 1 && $chunkZ % 20 == 1) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                        $meta = [3, 11, 11, 11, 10];
                        $rand = mt_rand(0, count($blocks) - 1);
                        $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                        $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                        $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 1 && $chunkZ % 20 == 2) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($z == 15) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }

                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 0 && $chunkZ % 20 == 2) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($x == 0 or $z == 15) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }

                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            } else if ($chunkX % 20 == 1 && $chunkZ % 20 == 2) {
                for ($x = 0; $x < 16; ++$x) {
                    for ($z = 0; $z < 16; ++$z) {
                        if ($z == 15 and $x == 15) {
                            for ($y = 99; $y < 110; ++$y) {
                                $chunk->setBlock($x, $y, $z, BlockIds::INVISIBLE_BEDROCK);
                            }
                        } else {
                            $blocks = [BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA, BlockIds::TERRACOTTA];
                            $meta = [3, 11, 11, 11, 10];
                            $rand = mt_rand(0, count($blocks) - 1);
                            $chunk->setBlock($x, 99, $z, $blocks[$rand], $meta[$rand]);
                            $chunk->setBlock($x, 98, $z, BlockIds::BEDROCK);
                            $chunk->setBlock($x, 110, $z, BlockIds::INVISIBLE_BEDROCK);
                        }
                    }
                }

                $chunk->setX($chunkX);
                $chunk->setZ($chunkZ);

            }
        }
    }


    public function populateChunk(int $chunkX, int $chunkZ): void
    {
    }

    public function getSettings(): array
    {
        return [];
    }

    public function getName(): string
    {
        return Utils::CLASSIC_DUEL_GEN;
    }

    #[Pure] public function getSpawn(): Vector3
    {
        return new Vector3(0, 100, 0);
    }
}