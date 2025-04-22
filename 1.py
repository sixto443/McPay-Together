from PyQt5.QtWidgets import QApplication, QMainWindow
from PyQt5.QtWebEngineWidgets import QWebEngineView
import sys

class WebApp(QMainWindow):
    def __init__(self):
        super().__init__()
        self.setWindowTitle("VisionaryROI App")  # Nombre de la ventana
        self.setGeometry(100, 100, 1280, 800)  # Tamaño de la ventana
        
        # Crear un navegador WebView
        self.browser = QWebEngineView()
        self.browser.setUrl("https://visionaryroi.azurewebsites.net")  # URL de tu web
        self.setCentralWidget(self.browser)  # Agregar WebView a la ventana

if __name__ == "__main__":
    app = QApplication(sys.argv)
    window = WebApp()
    window.show()
    sys.exit(app.exec_())
