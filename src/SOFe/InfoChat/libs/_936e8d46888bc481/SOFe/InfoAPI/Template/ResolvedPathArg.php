<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Template;

use Closure;
use pocketmine\command\CommandSender;
use RuntimeException;
use Shared\SOFe\InfoAPI\Mapping;
use Shared\SOFe\InfoAPI\Parameter;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\AwaitGenerator\Traverser;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Ast;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Ast\MappingCall;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Pathfind;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\ReadIndices;

use function array_keys;
use function array_map;
use function count;
use function implode;
use function json_decode;
use function range;
use function sprintf;
































































































































































































final class ResolvedPathArg {
	/**
	 * $path and $constantValue are exclusive.
	 *
	 * @param ?CoalescePath<PathOnly> $path
	 */
	private function __construct(
		public Parameter $param,
		public ?CoalescePath $path,
		public mixed $constantValue,
	) {
	}

	public static function unset(Parameter $param) : self {
		return new self($param, path: null, constantValue: null);
	}
	public static function fromAst(ReadIndices $indices, string $sourceKind, Ast\Arg $astArg, Parameter $param) : self {
		if ($astArg->value instanceof Ast\JsonValue) {
			$value = json_decode($astArg->value->json);
			return new self($param, path: null, constantValue: $value);
		} else {
			$expr = $astArg->value;
			$path = Template::toCoalescePath($indices, $sourceKind, $expr, requireDisplayable: false, expectTargetKind: $param->kind, pathToChoice: fn(ResolvedPath $path) => new PathOnly($path));
			return new self($param, path: $path, constantValue: null);
		}
	}
}