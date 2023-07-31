// // 
// // selection.js

// document.addEventListener("DOMContentLoaded", function() {
//     // Get all checkboxes and radio buttons
//     const checkboxes = document.querySelectorAll('input[type="checkbox"]');
//     const radioButtons = document.querySelectorAll('input[type="radio"]');
//     const selectedMessage = document.getElementById("selectedMessage");
  
//     // Function to update the selected items message
//     function updateSelectedItems() {
//       let selectedItems = [];
  
//       // Check for selected checkboxes
//       checkboxes.forEach(checkbox => {
//         if (checkbox.checked) {
//           selectedItems.push(checkbox.value);
//         }
//       });
  
//       // Check for selected radio buttons
//       radioButtons.forEach(radioButton => {
//         if (radioButton.checked) {
//           selectedItems.push(radioButton.value);
//         }
//       });
  
//       // Update the message with the selected items
//       selectedMessage.textContent = "Selected items: " + selectedItems.join(", ");
//     }
  
//     // Add event listeners to checkboxes and radio buttons
//     checkboxes.forEach(checkbox => {
//       checkbox.addEventListener("change", updateSelectedItems);
//     });
  
//     radioButtons.forEach(radioButton => {
//       radioButton.addEventListener("change", updateSelectedItems);
//     });
//   });
  
// selection.js

document.addEventListener("DOMContentLoaded", function() {
    // Get all checkboxes and radio buttons
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const selectedMessage = document.getElementById("selectedMessage");
  
    // Function to update the selected items message
    function updateSelectedItems() {
      let selectedItems = [];
  
      // Check for selected checkboxes
      checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
          selectedItems.push(checkbox.nextSibling.textContent.trim());
        }
      });
  
      // Check for selected radio buttons
      radioButtons.forEach(radioButton => {
        if (radioButton.checked) {
          selectedItems.push(radioButton.nextSibling.textContent.trim());
        }
      });
  
      // Update the message with the selected items
      selectedMessage.textContent = "Selected items: " + selectedItems.join(", ");
    }
  
    // Add event listeners to checkboxes and radio buttons
    checkboxes.forEach(checkbox => {
      checkbox.addEventListener("change", updateSelectedItems);
    });
  
    radioButtons.forEach(radioButton => {
      radioButton.addEventListener("change", updateSelectedItems);
    });
  });
  