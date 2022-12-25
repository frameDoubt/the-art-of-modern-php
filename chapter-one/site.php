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
            private string $dogBreed;
            function __construct(string $param1, string $param2)
            {
                $this->dogName = $param1;
                $this->dogBreed = $param2;
            }
            public function nameAndBreedString(): void
            {
                echo "This dog is a $this->dogBreed, named $this->dogName. <br>";
            }
        }

        $doggo1 = new Dog("Osmole", "Koolie");
        $doggo1->crossBreed = "German Shepherd";
        $doggo2 = new Dog("Achroma", "Great Pyrenees");
        $doggo1->nameAndBreedString();
        echo "$doggo1->crossBreed <br>";
        $doggo2->nameAndBreedString();
    ?>
</body>
</html>