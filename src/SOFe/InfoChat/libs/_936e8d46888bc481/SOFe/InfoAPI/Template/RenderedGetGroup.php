<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Template;

use Closure;
use RuntimeException;
use function is_string;
















































final class RenderedGetGroup implements RenderedGroup {
	/**
	 * @param RenderedGetElement[] $elements
	 */
	public function __construct(private array $elements) {
	}

	public function get() : string {
		$output = "";
		foreach ($this->elements as $element) {
			$output .= $element->get();
		}
		return $output;
	}
}