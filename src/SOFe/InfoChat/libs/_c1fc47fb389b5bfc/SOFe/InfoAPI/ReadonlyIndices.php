<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\InfoAPI;

use Shared\SOFe\InfoAPI\Display;
use Shared\SOFe\InfoAPI\KindMeta;
use Shared\SOFe\InfoAPI\Mapping;
use Shared\SOFe\InfoAPI\ReflectHint;
use Shared\SOFe\InfoAPI\Registry;
use function array_splice;
use function count;




































































































































































































































final class ReadonlyIndices implements ReadIndices {
	public function __construct(
		public DisplayIndex $displays,
		public NamedMappingIndex $namedMappings,
		public ImplicitMappingIndex $implicitMappings,
		public ReflectHintIndex $hints,
	) {
	}

	public function getDisplays() : DisplayIndex {
		return $this->displays;
	}
	public function getNamedMappings() : NamedMappingIndex {
		return $this->namedMappings;
	}
	public function getImplicitMappings() : ImplicitMappingIndex {
		return $this->implicitMappings;
	}
	public function getReflectHints() : ReflectHintIndex {
		return $this->hints;
	}
}