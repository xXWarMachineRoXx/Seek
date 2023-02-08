<?php


function spitText()
{
//     $cmd = 'tesseract uploads/temp.';
//     $sHtml = `<div class=" p-5  text-center">
//     <h1 class="text-center">Output</h1>
//     <p class="text-center text-black-50"> Scanned Text</p>
//     <textarea name="output" id="output" cols="100" rows="10" readonly
//         placeholder="Output of the scanned image would be displayed here "></textarea>

// </div>`;
    echo $_FILES["fileToUpload"]["name"];
}
function Classification()
{
    $sHtml = `<div class="container">
    <div class=" p-5  ">
        <h1 class="text-center">Classification</h1>
        <p class="text-center text-black-50"> Scanned text put into form fields</p>
        <div class="row">
            <div class="mb-3 col-6 ">
                <label for="" class="form-label">Organization</label>
                <input readonly type="text" name="Organization" id="Organization" class="form-control" placeholder=""
                    aria-describedby="helpId " >
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="mb-3 col-6">
                <label for="" class="form-label">Caller</label>
                <input readonly type="text" name="Caller" id="Caller" class="form-control" placeholder="Caller"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted">the person who called</small>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="" class="form-label">Status</label>
                <input readonly type="text" name="Status" id="Status" class="form-control" placeholder="Status"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted">Status</small>
            </div>
            <div class="mb-3 col-6">
                <label for="" class="form-label">Origin</label>
                <input readonly type="text" name="Origin" id="Origin" class="form-control" placeholder="Origin"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted">Origin</small>
            </div>
            <div class="mb-3 col-6">
                <label for="" class="form-label">Title</label>
                <input readonly type="text" name="Title" id="Title" class="form-control" placeholder="Title"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted">Title</small>
            </div>
            <div class="mb-3 col-6">
                <label for="" class="form-label">Request Type</label>
                <input readonly type="text" name="Request_Type" id="Request_Type" class="form-control"
                    placeholder="Request Type" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Request Type</small>
            </div>
            <div class="mb-3 col-6">
                <label for="" class="form-label">Description</label>
                <input readonly type="text" name="Description" id="Description" class="form-control"
                    placeholder="Description" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Description</small>
            </div>

        </div>
    </div>
</div>`;
    echo $sHtml;
}