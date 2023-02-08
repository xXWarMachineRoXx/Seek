<?php include_once $_SERVER['DOCUMENT_ROOT']."/ocr_sample/php/header.php";
$app_root=$_SERVER['DOCUMENT_ROOT']."/ocr_sample";
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"><img style="margin-right: 10px;" src="./assets/4.ico" alt="logo">&nbsp;
                Seek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://tesseract-ocr.github.io/tessdoc/Installation.html">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/Ticket.php">Classification</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <main class="container ">

        <div class="bg-light p-5 rounded text-center row shadow p-3 mb-5 bg-white rounded">
           
            <div class="col" style="display: flex;align-content: center;align-items: center;">

                <h1>Classification</h1>
               


            </div>
        </div>

        <div class=" p-5  ">
            <h1 class="text-center">Upload Image </h1>
            <p class="text-center text-black-50"> Upload the image that would be scanned for text</p>
            <form name="uploader" action="<?php $app_root.'/php/test.php' ?>" method="post" enctype="multipart/form-data">
                Select image to upload:
                <br>
                <br>

                <input type="file" accept="image/*" name="fileToUpload" id="fileToUpload"><br>
                <input type="submit" class="btn btn-outline-success mt-4" value="Upload Image" name="submit">
            </form>
        </div>
        <div class=" p-5  text-center">
            <h1 class="text-center">Output</h1>
            <p class="text-center text-black-50"> Scanned Text</p>
            <textarea name="output" id="output" cols="100" rows="10" readonly placeholder="Output of the scanned image would be displayed here "></textarea>
           
        </div>
        <div class="toast-container position-absolute bottom-0 end-0">
            <div class="toast " role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header text-bg-success">
                    <img src="<?php $app_root.'/assets/3.ico' ?>" class="rounded me-2" alt="logo.">
                    <strong class="me-auto">Uploaded Sucessfully</strong>
                    <small class="text-muted">just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>

            </div>
        </div>
    </main>






</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="controller/index.js"></script>

</html>


<?php
$cmd = '';

exec($cmd, $output, $retval);

?>
