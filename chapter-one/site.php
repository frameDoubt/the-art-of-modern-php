<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chapter One Examples</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <script>
        declare(strict_types=1);
    </script>
    <?php
        class Dog {
            public string $dogName;
            public string $dogBreed;
            function __construct(string $param1, string $param2)
            {
                $this->dogName = $param1;
                $this->dogBreed = $param2;
            }
            public function nameAndBreedString(): string
            {
                return "This dog is a $this->dogBreed, named $this->dogName <br>";
            }
        }

        $doggo1 = new Dog("Lightning", "Koolie");
        $doggo2 = new Dog("Achroma", "Great Pyrenees");
        echo $doggo1->nameAndBreedString();
        echo $doggo2->nameAndBreedString();
    ?>
</body>
</html>