# speech-to-text

This task is a web-based application that allows users to convert their spoken words into text in real-time. The application provides a simple interface for starting and stopping voice recording, displays the transcribed text, and includes functionality to save the transcribed text to a MySQL database for later retrieval and analysis.

### `index.html`

The `index.html` file is the main front-end component of the Voice to Text Converter application. It includes the user interface elements and JavaScript code necessary for recording speech, converting it to text, and saving the text to the database.

### `save.php`
The `save.php` file is the back-end component responsible for saving the transcribed text to a MySQL database. It processes the incoming data from the front-end and performs database operations to store the text.

## How It Works

1. **User Interface (`index.html`):**

The user clicks the "Start Recording" button to begin transcribing speech.
The microphone remains active until the user clicks the "Stop Recording" button.
The transcribed text appears in the textarea in real-time.

2. **Saving to Database (`save.php`):**

The user clicks the "Save to Database" button to save the transcribed text.
The text is sent to the save.php script, which inserts it into the MySQL database.
The save.php script returns a success or error message based on the result of the database operation.
