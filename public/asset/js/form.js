startTextEditor();

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
let postNumber = 1;
forme = document.getElementById('post-form-parent-id');
function addNewForm() {
    

    console.log(forme)

    // const newForm = parent.nextElementSibling.cloneNode(true);
    // newForm.getElementById('form6Example1').value = "";
    // newForm.getElementById('form6Example7').value = "";
    // postNumber++;
    // newForm.getElementById('post-number').innerText = postNumber;
    // parent.parentNode.appendChild(newForm);
}

