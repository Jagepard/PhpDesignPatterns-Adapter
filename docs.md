## Table of contents

- [\Structural\Adapter\Adapter](#class-structuraladapteradapter)
- [\Structural\Adapter\AnotherRegistryInterface (interface)](#interface-structuraladapteranotherregistryinterface)
- [\Structural\Adapter\AnotherRegistry](#class-structuraladapteranotherregistry)
- [\Structural\Adapter\Registry](#class-structuraladapterregistry)
- [\Structural\Adapter\RegistryInterface (interface)](#interface-structuraladapterregistryinterface)

<hr />

### Class: \Structural\Adapter\Adapter

> Class RegistryAdapter

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Structural\Adapter\AnotherRegistryInterface](#interface-structuraladapteranotherregistryinterface)</em> <strong>$registry</strong>)</strong> : <em>void</em><br /><em>RegistryAdapter constructor.</em> |
| public | <strong>getFirst()</strong> : <em>string</em> |
| public | <strong>getRegistry()</strong> : <em>[\Structural\Adapter\AnotherRegistryInterface](#interface-structuraladapteranotherregistryinterface)</em> |
| public | <strong>getSecond()</strong> : <em>string</em> |
| public | <strong>setFirst(</strong><em>\string</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setSecond(</strong><em>\string</em> <strong>$value</strong>)</strong> : <em>void</em> |

*This class implements [\Structural\Adapter\RegistryInterface](#interface-structuraladapterregistryinterface)*

<hr />

### Interface: \Structural\Adapter\AnotherRegistryInterface

> Interface AnotherRegistryInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getData()</strong> : <em>array</em> |
| public | <strong>setData(</strong><em>\string</em> <strong>$item</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Structural\Adapter\AnotherRegistry

> Class AnotherRegistry

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getData()</strong> : <em>array</em> |
| public | <strong>setData(</strong><em>\string</em> <strong>$item</strong>)</strong> : <em>void</em> |

*This class implements [\Structural\Adapter\AnotherRegistryInterface](#interface-structuraladapteranotherregistryinterface)*

<hr />

### Class: \Structural\Adapter\Registry

> Class Registry

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFirst()</strong> : <em>string</em> |
| public | <strong>getSecond()</strong> : <em>string</em> |
| public | <strong>setFirst(</strong><em>\string</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setSecond(</strong><em>\string</em> <strong>$value</strong>)</strong> : <em>void</em> |

*This class implements [\Structural\Adapter\RegistryInterface](#interface-structuraladapterregistryinterface)*

<hr />

### Interface: \Structural\Adapter\RegistryInterface

> Interface RegistryInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFirst()</strong> : <em>string</em> |
| public | <strong>getSecond()</strong> : <em>string</em> |
| public | <strong>setFirst(</strong><em>\string</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>setSecond(</strong><em>\string</em> <strong>$value</strong>)</strong> : <em>void</em> |

