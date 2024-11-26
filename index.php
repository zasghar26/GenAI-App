<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalOcean Themed Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, #0061EB, #031B4E);
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            margin-bottom: 20px;
        }
        .chatbot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <h1>Welcome to DigitalOcean</h1>
    <p>Your DigitalOcean-powered GenAI Chatbot is ready to assist you!</p>

    <!-- Chatbot Script -->
    <div class="chatbot-container">
        <script async
            src="https://agent-df84da16dccac352151a-x7cs6.ondigitalocean.app/static/chatbot/widget.js"
            data-agent-id="c608de03-a1c5-11ef-bf8f-4e013e2ddde4"
            data-chatbot-id="iBWI8AUPaWFRkJZaxWeDQHJu9UuN6B4t"
            data-name="gen-ai-proj-prod Chatbot"
            data-primary-color="#031B4E"
            data-secondary-color="#E5E8ED"
            data-button-background-color="#0061EB"
            data-starting-message="Hello! How can I help you today?"
            data-logo="/static/chatbot/icons/default-agent.svg">
        </script>
    </div>
</body>
</html>
