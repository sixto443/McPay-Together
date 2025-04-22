const electronInstaller = require('electron-winstaller');

electronInstaller.createWindowsInstaller({
    appDirectory: './dist/VisionaryROI-win32-x64',
    outputDirectory: './installer',
    authors: 'SIXTO',
    exe: 'VisionaryROI.exe',
}).then(() => console.log("Instalador creado")).catch(console.log);
