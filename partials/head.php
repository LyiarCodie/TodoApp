<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width,initial-scale=1.0' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
        <title>Todo</title>
        <link rel='preconnect' href='https://fonts.gstatic.com/' />
        <link rel='preconnect' href='https://fonts.googleapis.com/' />
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Inter&display=swap' />
        <link rel='stylesheet' href='bootstrap.min.css' />
        <style>
            .app {
                border: 1px solid rgb(225, 225, 232);
                border-radius: .8rem;
                max-width: 768px;
                margin-inline: auto;
                margin-top: 1.2rem;
                padding-inline: 1.2rem;
                box-sizing: border-box;
            }

            .line-through { text-decoration: line-through; }
            .inactive { opacity: 0.6; }
            .flex { display: flex;}
            .items-center { align-items:center; }
            .justify-between { justify-content: space-between; }
            .px-sm { padding-inline: .8rem; }
            .pb-sm { padding-bottom: .8rem; }
        </style>
    </head>
    <body>
        <div class="app">
            <header class="page-header text-center">
                <h2>Todo</h2>
            </header>