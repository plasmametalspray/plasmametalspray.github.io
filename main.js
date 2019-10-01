const electron = require('electron');
const { app, BrowserWindow } = electron;

let mainWindow;

app.on('ready', () => {
    mainWindow = new BrowserWindow({
        width: 1280,
        height: 720
    });

    mainWindow.setTitle('title of the desktop app');
    mainWindow.loadURL('file:///D:/Project/SkripsiMesin/index.html');

    mainWindow.on('closed', () => {
        mainWindow = null;
    });
});