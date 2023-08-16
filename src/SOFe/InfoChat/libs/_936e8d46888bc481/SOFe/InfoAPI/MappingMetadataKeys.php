<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI;
















final class MappingMetadataKeys {
	/**
	 * Marks the name of the plugin that provides the mapping.
	 *
	 * The mapping would be unusable without the specified plugin.
	 */
	public const SOURCE_PLUGIN = "infoapi/source-plugin";

	/**
	 * Indicates that this is the non-primary alias for
	 * the mapping from the same source kind with the specified name.
	 */
	public const ALIAS_OF = "infoapi/alias-of";
}