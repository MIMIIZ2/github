$(document).ready(function() {
    // Example: Add items to the scrollable list
    addItemToScrollList("Item 1");
    addItemToScrollList("Item 2");
    addItemToScrollList("Item 3");
    addItemToScrollList("Item 4");
    addItemToScrollList("Item 5");
});

function addItemToScrollList(itemText) {
    // Append a new item to the scrollable list
    $("#scroll-list").append("<li>" + itemText + "</li>");
}

function scrollList() {
    // Scroll the list down by a certain amount
    $("#scrollable-list").animate({ scrollTop: '+=50' }, 500);
}
