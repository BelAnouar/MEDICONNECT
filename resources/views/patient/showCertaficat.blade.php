<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
    }

    .certificat {
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .certificat-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    .certificat-date {
        font-size: 14px;
        color: #555;
        margin-bottom: 20px;
    }

    .certificat-text {
        font-size: 16px;
        color: #444;
        margin-bottom: 10px;
    }

    .bold {
        font-weight: bold;
    }
</style>

<body>
    <div>

        <div class="container px-4 py-8 mx-auto">

            <div id="certificat" class="certificat">
                MediConnect

                @foreach ($Certaficat as $item)
                    <div class="certificat-header">
                        <h1 class="certificat-title">Certificat Professionnel</h1>
                        <p class="certificat-date">Date: {{ $item->ConsultationDate }}</p>
                    </div>
                    <div class="certificat-content">

                        <p class="certificat-text"><span class="bold">Ce certificat est décerné à :</span>
                            {{ $item->patient->name }}</p>

                        <p class="certificat-text"><span class="bold">Nombre de jours :</span>
                            {{ $item->NumberOfDaysRecomended }} jours</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
