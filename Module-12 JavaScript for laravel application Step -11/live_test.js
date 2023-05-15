function addListItem() {
  // Select the element with the id 'myList'
  var myList = document.getElementById("myList");

  // Create a new list item element
  var newListItem = document.createElement("li");

  // Set the text content of the new list item to 'Apples'
  newListItem.textContent = "Apples";

  // Append the new list item to the end of the list
  myList.appendChild(newListItem);
}

/**
 *
 *  You can call this function in your code to add the new list item to the list: addListItem();
 *
 */
