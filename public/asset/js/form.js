startTextEditor();

let postNumber = 1;

function startTextEditor(){
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | forecolor backcolor | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
            ],
            color_cols: 5
    });
}

function stopTextEditor(){
    tinymce.remove();
}



function addNewForm(){
    stopTextEditor();
    let parent = document.getElementById('post-form-parent-id');
    let newForm = document.getElementById('post-form-id').cloneNode(true);
    parent.appendChild(newForm);
    document.getElementById('post-number').innerText = ++postNumber;

    // let formsNumber = document.getElementsByName("post-title").length;
    // let postEditors = document.querySelectorAll('postditor');
    // for(i = 0; i < formsNumber; i++){
    //     postEditors[i].id= "myTextarea-" + i;
    //     let submitButton = postEditors[i].parentNode.parentNode.querySelector("a[onclick='sendPostData(this)']");
    //     submitButton.setAttribute("data-index", i);
    // }
    startTextEditor();
}



// function getFormData(index) {
//     let formData = {};
//     formData['post-title'] = document.getElementsByName("post-title")[index].value;
//     formData['post-categories'] = document.getElementsByName("post-categories")[index].value;
//     formData['post-image'] = document.getElementsByName("post-image")[index].value;
//     formData['post-article'] = tinymce.get(document.querySelectorAll('postditor')[index].id).getContent();
//     return formData;
// }

// function getData(i) {
//     let postData = [];
//     if(i != undefined) {
//         postData[i] = getFormData(i);
//         return postData;
//     }
//     let formsNumber = document.getElementsByName("post-title").length;
//     for(i = 0; i < formsNumber; i++) {
//         postData[i] = getFormData(i);
//     }
//     return postData;
// }



// function sendPostData(el) {
//     let data ;
//     if(el != undefined) {
//         let index = el.getAttribute('data-index');
//         data = getData(index);
//     }

//     else data = getData();

//     let xhr = new XMLHttpRequest();
//     $url = "./app/controller/PostController.php";
//     xhr.open("POST", $url, true);
//     xhr.setRequestHeader("Content-Type", "application/json");
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             // handle response here
//             console.log(xhr.responseText);
//         }
//     }
//     xhr.send(JSON.stringify(data));
// }

