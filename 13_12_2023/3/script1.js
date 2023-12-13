
let textarea = document.getElementById("textarea")
textarea.addEventListener("input", (event) => {
    document.getElementById("char_num").innerHTML = textarea.value.length
})