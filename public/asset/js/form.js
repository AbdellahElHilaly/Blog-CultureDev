startTextEditor();

let postNumber = 1;

function startTextEditor(){
    tinymce.init({
        selector: 'postditor',
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

    let formsNumber = document.getElementsByName("post-title").length;
    let postEditors = document.querySelectorAll('postditor');
    for(i = 0; i < formsNumber; i++){
        postEditors[i].id= "myTextarea-" + i;
    }
    startTextEditor();
    
}


function getData(){
    
    var postData = {
        'post-title': [],
        'post-categories': [],
        'post-image': [],
        'post-article': []
    };
    let formsNumber = document.getElementsByName("post-title").length;
    let postEditors = document.querySelectorAll('postditor');
    for(i = 0; i < formsNumber; i++){
        postData['post-title'][i] = document.getElementsByName("post-title")[i].value;
        postData['post-categories'][i] = document.getElementsByName("post-categories")[i].value;
        postData['post-image'][i] = document.getElementsByName("post-image")[i].value;
        
        // postData['post-article'][i] = tinymce.get(postEditors[i].id).getContent();
        console.log(tinymce.get(postEditors[i].id).getContent())
    }

    return postData;
}


function sendPostData(){
    // console.log(getData())
    getData()
}

