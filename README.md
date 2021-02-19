# Livewire multiselect component



## Installation

You can install the package via composer:

```bash
composer require bolyfci/livewire-multiselect
```
## Usage

```bash
 <x-multiselect
        wire:model="formAttributes.multiselect"
        :options="collect(\App\Enums\RoleEnum::toArray())->map(fn($value,$key)=> ['id'=>$key , 'name'=> $value])"
    />
 ```


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
