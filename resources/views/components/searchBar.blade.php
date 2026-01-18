<style>
.search-box {
    margin: auto;
    height: 56px;
    width: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}


.search-box input {
    height: 50px;
    width: 400px;
    border: none;
    outline: none;
    padding: 0 10px;
}

.home_search-bar-btn {
    height: 50px;
    border: none;
    background: none;
    cursor: pointer;
}

.home_search-bar-btn-icon-wrap {
    /* position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
         */
    margin-left: -30px;
    color: white;

}

.search-wrapper {
    position: relative;
}

#search-list {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: #fff;
    border: 1px solid #ddd;
    list-style: none;
    margin: 0;
    padding: 0;
    display: none;
    z-index: 1000;
}

#search-list li {
    padding: 10px;
    cursor: pointer;
}

#search-list li:hover {
    background: #f2f2f2;
}

@media screen and (max-width:700px) {
    .search-box input {
        width: 200px;
    }
}
#search-form{
    display:flex;
}
</style>
<div class="search-box search-wrapper border border-gray-500 mt-3">
    <!-- ........... -->
    <div class="ps-2">
        <i class="fa-solid fa-magnifying-glass " style="font-size:18px"></i>
    </div>
    <form id="search-form" action="/searchquiz" method="post">
        @csrf
        <input name="inp" type="search" id="search" class="search-input" placeholder="Search for quizzes">
        <button type="submit" class="home_search-bar-btn center" i18next-orgval-1="
                    " i18next-orgval-3="
                    " i18next-orgval-5="
                  " localized="" dir="ltr">
            <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 52 50" fill="none"
                class="home_search-bar-btn-bg svg" localized="" dir="ltr">
                <path
                    d="M6.80009 0.648197L45.4022 0.648214C49.0461 0.648215 52 3.60214 52 7.24599L52 42.874C52 46.5178 49.0461 49.4718 45.4022 49.4718L16.2333 49.4718C13.2398 49.4718 10.6215 47.4565 9.85529 44.5627L0.422082 8.93468C-0.68621 4.74881 2.46998 0.648195 6.80009 0.648197Z"
                    fill="currentColor" localized="" dir="ltr"></path>
            </svg>
            <div class="home_search-bar-btn-icon-wrap pe-2" i18next-orgval-1="
                      " i18next-orgval-3="
                    " localized="" dir="ltr">
                <div data-wf--icon-component--icon-color-icon-style="icon-only" class="icon-component" i18next-orgval-1="
                        " i18next-orgval-3="
                      " localized="" dir="ltr">
                    <div data-wf--icon-color--icon-color="inherit" class="icon-color" localized="" dir="ltr"><i
                            id="w-node-da39e052-bad3-e4d8-d680-8f9099ab1367-99ab1367" data-wf--icon--size="sm---20px"
                            class="icon fa fa-arrow-right" aria-label="hidden" localized="" dir="ltr"></i></div>
                </div>
            </div>
        </button>
    </form>
    <ul id="search-list"></ul>
    <!-- ........ -->
</div>

<script>
document.getElementById('search').addEventListener('keyup', function() {
    let query = this.value;
    let list = document.getElementById('search-list');

    if (query.length < 1) {
        list.style.display = 'none';
        list.innerHTML = '';
        return;
    }

    fetch(`/search?q=${query}`)
        .then(response => response.json())
        .then(data => {
            list.innerHTML = '';

            if (data.length === 0) {
                // list.innerHTML = '<li>No result found</li>';
            } else {
                data.forEach(item => {
                    list.innerHTML += `<li>${item.quiz}</li>`;
                });
            }

            list.style.display = 'block';
        });
});

document.addEventListener('click', function(e) {
    if (e.target.tagName === 'LI') {
        document.getElementById('search').value = e.target.innerText;
        document.getElementById('search-list').style.display = 'none';
    }
});
</script>