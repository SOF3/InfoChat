<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI\Template;

use Closure;
use pocketmine\command\CommandSender;
use RuntimeException;
use Shared\SOFe\InfoAPI\Mapping;
use Shared\SOFe\InfoAPI\Parameter;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\AwaitGenerator\Traverser;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI\Ast;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI\Ast\MappingCall;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI\Pathfind;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI\ReadIndices;

use function array_keys;
use function array_map;
use function count;
use function implode;
use function json_decode;
use function range;
use function sprintf;




























































































































































































































/**
 * @template R of RenderedElement
 * @template G of RenderedGroup
 */
interface GetOrWatch {
	/**
	 * @param R[] $elements
	 * @return G
	 */
	public function buildResult(array $elements) : RenderedGroup;

	/**
	 * @return EvalChain<R>
	 */
	public function startEvalChain() : EvalChain;

	/**
	 * @return R
	 */
	public function staticElement(string $raw) : RenderedElement;
}