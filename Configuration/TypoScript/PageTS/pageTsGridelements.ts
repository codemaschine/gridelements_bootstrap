# pxc MA
tx_gridelements {
    setup {

        boot1col {
            title = Gridelements Bootstrap: Modulcontainer (erweiterbar)
            description = Eine Spalte
            config {
                colCount = 1
                rowCount = 1
                rows {
                    1 {
                        columns {
                            1 {
                                name = Inhalt
                                colPos = 1
                            }
                        }
                    }
                }
            }

            flexformDS = FILE:EXT:gridelements_bootstrap/Configuration/FlexForm/boot1col.xml
        }

        boot2cols {
            title = Gridelements Bootstrap: 2 spaltig
            description = Zwei Spalten
            config {
                colCount = 2
                rowCount = 1
                rows {
                    1 {
                        columns {
                            1 {
                                name = Spalte A
                                colPos = 1
                            }

                            2 {
                                name = Spalte B
                                colPos = 2
                            }
                        }
                    }
                }
            }

            flexformDS = FILE:EXT:gridelements_bootstrap/Configuration/FlexForm/boot2cols.xml
        }

    }
}



