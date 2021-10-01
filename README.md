# InfoChat
A simple chat format plugin powered by [InfoAPI](https://poggit.pmmp.io/p/InfoAPI).

## Usage
Run the server once, stop it, then edit the `plugin_data/InfoChat/config.yml`:

```yaml
chat-format: |
	<{player}> {message}
```

You can use other detail infos provided by InfoAPI
(see [InfoAPI readme][infoapi readme] for more information):

```yaml
chat-format: |
	[{player world}] <{player}> {message}
```

	[infoapi readme]: https://github.com/SOF3/InfoAPI/tree/ae0e2ad01d3127c885d0d7bef9b9ec4d5fce9ebe#more-detailed-templates
