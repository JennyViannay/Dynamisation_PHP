<?php 
    $fakeUser = [
        'name' => 'Buffy',
        'lastname' => 'Summers',
        'avatar' => "https://media1.giphy.com/media/ymBQi6ePLEDiU/giphy.gif",
        'job' => 'Slayer',
        'skills' => [
            'fight', 'strong', 'smart', 'nice', 'sarcastic'
        ],
        'lovers' => [
            'Angel', 'Riley', 'Spike'
        ],
        'friends' => [
            'Willow the Best', 'Giles', 'Alex', 'Anya', 'Tara', 'Oz'
        ],
        'family' => [
            'Fake Sister', 'Mom', 'Dad de loin'
        ]
    ];
?>
<div class="row bonus_here bg-darkness text-white py-5 px-5">
    <div class="col-6 col-lg-6 col-sm-12 text-center">
        <div class="card" id="_TIPS">
            <img class="card-img-top" src="<?php echo $fakeUser['avatar']; ?>" alt="Card image cap">
            <div class="card-body bg-darkness font-white">
                <h5 class="card-title mono red"><?php echo $fakeUser['name'] ." ".$fakeUser['lastname']; ?></h5>
                <div class="mono">
                    Job : <span class="red"><?php echo $fakeUser['job']; ?></span>
                </div>
                <div class="mono">
                    Best skills : <span class="red"><?php echo getRandomQuotes($fakeUser['skills']) ?></span>
                </div>
                <div class="mono">
                    Best friend : <span class="red"><?php echo getRandomQuotes($fakeUser['friends']) ?></span>
                </div>
                <div class="mono">
                    Favorite parent : <span class="red"><?php echo getRandomQuotes($fakeUser['family']) ?></span>
                </div>
                <div class="mono">
                    Actual lover : <span class="red"><?php echo getRandomQuotes($fakeUser['lovers']) ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <h1 class="mono red">Well Done and Vive PHP 🐘</h1>
        <p class="my-5">
            Les informations de Buffy sont affichées de manière dynamique. <br>
            J'ai pu réutiliser une méthode du controller pour faire mes random skills, friend, parent et lover. <br>
            Pour voir de quelle méthode il s'agit rend toi dans le fichier /bonus/bonus_1.php : key_word => <span class="mono red">_TIPS</span>
        </p>
    </div>
</div>