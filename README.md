nodeOCR:
======
Uses nodecr to run tesseract on base64 encoded images from POST and returns the OCR'ed text.

TO USE:
 1. Install node.js
 2. Open run.bat
 3. Local webserver will run at http://localhost:8888
 4. Send XHR with jpeg base64 encoded image as POST body.
 5. nodeOCR will run tesseract on image and return OCR'ed text.
