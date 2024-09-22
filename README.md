# BookManagementSystem
Web Application Development using PHP - LAB 2

## Overview
Built using PHP and HTML, this Book Management System is straightforward. Users can enter book details such as title, author, and publication year, and the information is then shown on the page. Basic validation is carried out by the system, and error messages are displayed for any invalid input.

## Characteristics
- Gathers information about books such as title, author, and publication year.
- Verifies user inputs to make sure no fields are left blank and that the year is a valid numerical value.
- Presents the book details in a tabular layout.
- Provides error notifications if the input is not valid.

## How to Run
1. Open your web browser.
2. Navigate to `http://localhost/index.php` (or the appropriate URL based on your server setup).
3. Enter book details in the form and click "Add Book" to submit.

## Instructions
- **To Add a Book**: Enter the book title, author, and publication year, and then press "Add Book".
- **Validation Process**: The system verifies that no fields are left empty and ensures that the publication year is a valid number.
- **Handling Errors**: In case the form is incomplete or contains invalid data, error messages will appear below the form.
- **Book Display**: Upon successful submission, the book details will be presented in a table format.

## Structure of Files
- `index.php`: This file serves as the primary file, which includes the HTML form, PHP code for handling input, validation, and presenting book details.