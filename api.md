## Table of contents
- [Structural\Adapter\Adapter](#structural_adapter_adapter)
- [Structural\Adapter\AnotherRegistry](#structural_adapter_anotherregistry)
- [Structural\Adapter\AnotherRegistryInterface](#structural_adapter_anotherregistryinterface)
- [Structural\Adapter\Registry](#structural_adapter_registry)
- [Structural\Adapter\RegistryInterface](#structural_adapter_registryinterface)
<hr>

<a id="structural_adapter_adapter"></a>

### Class: Structural\Adapter\Adapter
##### implements [Structural\Adapter\RegistryInterface](#structural_adapter_registryinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( Structural\Adapter\AnotherRegistryInterface $registry )</em><br>Sets a different registry type<br>Устанавливает другой тип реестра|
|public|<em><strong>setFirst</strong>( string $value )</em><br>Sets the first value<br>Устанавливает первое значение|
|public|<em><strong>setSecond</strong>( string $value )</em><br>Sets the second value<br>Устанавливает второе значение|
|public|<em><strong>getFirst</strong>(): string</em><br>Gets the first value<br>Получает первое значение|
|public|<em><strong>getSecond</strong>(): string</em><br>Gets the second value<br>Получает второе значение|


<a id="structural_adapter_anotherregistry"></a>

### Class: Structural\Adapter\AnotherRegistry
##### implements [Structural\Adapter\AnotherRegistryInterface](#structural_adapter_anotherregistryinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>setData</strong>( string $item )</em><br>Sets data<br>Устанавливает данные|
|public|<em><strong>getData</strong>(): array</em><br>Receives data<br>Получает данные|


<a id="structural_adapter_anotherregistryinterface"></a>

### Class: Structural\Adapter\AnotherRegistryInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>setData</strong>( string $item )</em><br>|
|abstract public|<em><strong>getData</strong>(): array</em><br>|


<a id="structural_adapter_registry"></a>

### Class: Structural\Adapter\Registry
##### implements [Structural\Adapter\RegistryInterface](#structural_adapter_registryinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>setFirst</strong>( string $value )</em><br>Sets the first value<br>Устанавливает первое значение|
|public|<em><strong>setSecond</strong>( string $value )</em><br>Sets the second value<br>Устанавливает второе значение|
|public|<em><strong>getFirst</strong>(): string</em><br>Gets the first value<br>Получает первое значение|
|public|<em><strong>getSecond</strong>(): string</em><br>Gets the second value<br>Получает второе значение|


<a id="structural_adapter_registryinterface"></a>

### Class: Structural\Adapter\RegistryInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>setFirst</strong>( string $value )</em><br>|
|abstract public|<em><strong>setSecond</strong>( string $value )</em><br>|
|abstract public|<em><strong>getFirst</strong>(): string</em><br>|
|abstract public|<em><strong>getSecond</strong>(): string</em><br>|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
