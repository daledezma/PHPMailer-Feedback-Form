## Prerequisites
-Download [Node.js](https://nodejs.org/en/download/)
-Download [Composer](https://getcomposer.org/download/)

## Getting Started

### Install dependencies (only the first time)
`npm install`
`composer install`

### Available Scripts
Run the local server at localhost:8080
`npm run dev`

Build for production in the dist/ directory
`npm run build`

## Features
- Utilizes PHPMailer, a PHP library used to send emails via local mail server.
- Vite utilized as front-end build tool.
- Bootstrap frontend toolkit utilized.

## SMTP Relay
In order to send emails with the feedback form on a local instance, we'll be using the SMTP relay service from SendInBlue. SendInBlue offers free services but other third party SMTP services can be configured instead.