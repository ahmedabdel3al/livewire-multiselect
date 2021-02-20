# Livewire multiselect component

## Requirements
- [Tailwind](https://tailwindcss.com/)
- [Alpine JS](https://github.com/alpinejs/alpine)
- @stack('scripts') in layout blade 

## Installation

You can install the package via composer:

```bash
composer require bolyfci/livewire-multiselect
```
## Usage

```bash
 <x-multiselect
        wire:model="multiselect"
        :options="[['id' => 'laravel , 'name' => 'Laravel'], ['id' => 'alpineJs', 'name' => 'Alpine JS'], ['id' => 'livewire', 'name' => 'Livewire']]"
    />
 ```
 
 ### Props
| Property | Arguments |Default | Example |
|----|----|----|----|
|**trackBy**|*String* Used to compare objects.| id |```trackBy="id"```|
|**label**|*String* Label from option Object, that will be visible in the dropdown..| name | ```title="name"```|  
|**options**|*Arrray* Array of available options.| || ```:options="$options ?: [] "```|
|**placeholder**|*string*Equivalent to the placeholder attribute on a <select> input. .| select options |```placholder="select options"```|




---


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ahmed abdelaal](https://github.com/ahmedabdelaal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
