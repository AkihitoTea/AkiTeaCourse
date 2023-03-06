function startSearch(){
    const input = document.querySelector(".searchInput")
    location.href='search.php?'+input.value;
}

