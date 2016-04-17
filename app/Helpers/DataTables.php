<?php
namespace App\Helpers;

class DataTables {

    public static function i18n()
    {
        $result = <<<EOF
        {
            create: {
                button: "Ny",
                title:  "Skapa ny",
                submit: "Skapa"
            },
            edit: {
                button: "Ändra",
                title:  "Ändra data",
                submit: "Spara"
            },
            remove: {
                button: "Ta bort",
                title:  "Ta bort data",
                submit: "Ta bort",
                confirm: {
                    _: "Vill du ta bort %d rader?",
                    1: "Vill du ta bort 1 rad?"
                }
            },
            error: {
                system: "Någonting gick fel, kontakta systemsupport!"
            },
            multi: {
                title: "Välj fler värden",
                restore: "Återställ förändringarna"
            },
            datetime: {
                previous: 'Föregående',
                next:     'Nästa',
                months:   [ 'Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December' ],
                weekdays: [ 'Mån', 'Tis', 'Ons', 'Tors', 'Fre', 'Lör', 'Sön' ]
            }
        }
EOF;
        return $result;
    }

}