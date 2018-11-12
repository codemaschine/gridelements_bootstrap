# gridelements_bootstrap

Modular system for TYPO3 gridelements: Extend gridelements with your own Modules (every module is one partial). Just extend the TypoScript modules Section and add a partial with the same name, thats it. Examples are included. In every partial you have enhanced data with real objects to build all you want just with fluid.

# Example for TypoScript

```
    settings {

        // Define your own extensions here
        modules{
            akkordeon {
                title = Akkordeon
                description = Just add some contentelements of type "text and media" and see what happens
                css {
                    akkordeon1 = Akkordeon Type 1
                    container = Container Boxed
                    container-fluid = Full Width Container
                }
            }
            debug {
                title = Debug Output (see variables you can use)
                description = Add some elements and see the debug output, so you know how you can extend this and how much you can do with this :)
                css {
                    container = Container Boxed
                    container-fluid = Full Width Container
                }
            }
        }

        // Extra CSS Classes for visibility
        visibility {
            0 = text-left
            1 = text-center
            2 = text-right
            3 = text-justify
            4 = text-nowrap
        }

        // Extra CSS Classes for Container (container, container-fluid...)
        container {
            0 = equalize-rows
            1 = something-other
        }

    }
```