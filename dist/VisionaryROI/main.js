const { app, BrowserWindow } = require('electron');
const path = require('path');

let win;

function createWindow() {
    // Crear la ventana del navegador
    win = new BrowserWindow({
        width: 1280,
        height: 800,
        icon: path.join(__dirname, 'icon.ico'),  // Opcional: ícono de la aplicación
        webPreferences: {
            nodeIntegration: true,  // Permite el uso de Node.js en el renderer
            contextIsolation: false // Desactiva el aislamiento de contexto
        }
    });

    // Cargar la URL de la aplicación web
    win.loadURL('https://visionaryroi.azurewebsites.net');

    // Crear los botones de navegación cuando la página esté cargada
    win.webContents.on('dom-ready', () => {
        win.webContents.executeJavaScript(`
            // Crear los botones de navegación
            const backButton = document.createElement('button');
            backButton.textContent = 'Atrás';
            backButton.style.position = 'absolute';
            backButton.style.top = '10px';
            backButton.style.left = 'calc(50% - 100px)';
            backButton.style.padding = '5px 10px';
            backButton.style.fontSize = '12px';
            backButton.style.cursor = 'pointer';
            backButton.style.borderRadius = '5px';
            backButton.style.backgroundColor = '#007bff';
            backButton.style.color = 'white';

            const forwardButton = document.createElement('button');
            forwardButton.textContent = 'Adelante';
            forwardButton.style.position = 'absolute';
            forwardButton.style.top = '10px';
            forwardButton.style.left = 'calc(50% + 10px)';
            forwardButton.style.padding = '5px 10px';
            forwardButton.style.fontSize = '12px';
            forwardButton.style.cursor = 'pointer';
            forwardButton.style.borderRadius = '5px';
            forwardButton.style.backgroundColor = '#007bff';
            forwardButton.style.color = 'white';

            // Añadir los botones al DOM
            document.body.appendChild(backButton);
            document.body.appendChild(forwardButton);

            // Funciones de navegación
            backButton.addEventListener('click', function() {
                if (window.history.length > 1) {
                    window.history.back();
                }
            });

            forwardButton.addEventListener('click', function() {
                window.history.forward();
            });
        `);
    });

    // Manejar ventanas emergentes (pop-ups)
    win.webContents.on('new-window', (event, url) => {
        event.preventDefault();  // Prevenir la apertura en una ventana interna
        require('electron').shell.openExternal(url);  // Abrir el enlace en el navegador externo
    });
}

// Crear la ventana cuando Electron esté listo
app.whenReady().then(createWindow);

// Cerrar la aplicación cuando todas las ventanas se cierren
app.on('window-all-closed', () => {
    if (process.platform !== 'darwin') {
        app.quit();
    }
});
