$(document).ready(function () {
    activeTab();
});

function activeTab() {

    var url = document.location.href.split("/");
    var indexMyProject = array_search(url);
    var indexCallTab = indexMyProject + 1;
    var callTab = url[3];
    var tabActif;

    if (callTab === 'announces') {
        tabActif = $('#announces');
    } else {
        tabActif = $('#homepage');
    }

    tabActif.addClass("active");
}

function array_search(what, where) {
    var tabIndex = -1;
    for (elt in where) {
        tabIndex++;
        if (where[elt] == what) {
            return tabIndex;
        }
    }
    tabIndex = -1;
    return tabIndex;
}