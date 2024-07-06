<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .certificate {
            border: 10px solid #ddd;
            padding: 30px;
            width: 600px;
            background-color: #fff;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .certificate h1 {
            font-size: 24px;
            margin: 0;
        }

        .certificate h2 {
            font-size: 20px;
            margin: 10px 0;
        }

        .certificate p {
            font-size: 16px;
        }

        .certificate .signature {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }

        .certificate .signature div {
            width: 45%;
            text-align: center;
        }

        .certificate .signature div p {
            border-top: 1px solid #000;
            margin: 0;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="certificate">
        <h1>Certificado de Reconocimiento</h1>
        <p>Este certificado se otorga a</p>
        <h2>[{{ $user->name }}]</h2>
        <p>En reconocimiento a su sobresaliente desempeño y dedicación.</p>
        <p>Otorgado el [{{ $date }}]</p>
        <div class="signature">
            <div>
                <p>_______________________</p>
                <p>Firma del Director</p>
            </div>
            <div>
                <p>_______________________</p>
                <p>Firma del Instructor</p>
            </div>
        </div>
    </div>









    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
