function showModal() {
    $('.modal').modal({
        centered: false
    }).modal('show');
}
//クリックで動く
$('.nav-open').click(function(){
    $(this).toggleClass('active');
    $(this).next('nav').slideToggle();
});
// モーダル内チェックボックス処理
function chgGrandParent(c) {
    const t = c.parentElement.parentElement.parentElement.getElementsByTagName("input");
    const flag = c.checked;
    for(let i = 0, j = t.length; i < j; i++) {
        t[i].checked = flag;
    }
}
function chgParent(c) {
    const t = c.parentElement.parentElement.parentElement.getElementsByTagName("input");
    const flag = c.checked;
    let isAllChildsSelected = true;

    for(let i = 0, j = t.length; i < j; i++) {
        t[i].checked = flag;
    }
}
function chgChild(c) {
    const t = c.parentElement.parentElement.parentElement.getElementsByTagName("input");
    const flag = c.checked;
    let isAllGChildsSelected = true;
    let isAllChildsSelected = true;

    for(let i = 0, j = t.length; i < j; i++) {
        t[i].checked = flag;
    }
}
function chgGrandChild(c) {
    const middleCategoryBox = c.parentElement.parentElement.parentElement;
    const childInput = middleCategoryBox.children[0].getElementsByTagName("input");
    const majorCategory = middleCategoryBox.parentElement.parentElement.parentElement;
    const parentInput = majorCategory.children[0].getElementsByTagName("input");
    const checkboxAll = document.getElementById("checkbox_all");
    const flag = c.checked;
    if(!flag){
        childInput[0].checked = flag;
        parentInput[0].checked = flag;
        checkboxAll.checked = flag;
    }
}
