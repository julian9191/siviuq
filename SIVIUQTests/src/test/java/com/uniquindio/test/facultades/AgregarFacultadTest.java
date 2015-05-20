package com.uniquindio.test.facultades;


import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.By;
import org.openqa.selenium.firefox.FirefoxDriver;

public class AgregarFacultadTest {

    WebDriver driver;

    @Before
    public void setup(){
        driver = new FirefoxDriver();

        // Definir URL base.
        String baseUrl = "http://localhost/siviuq/faculties/add";
        driver.get(baseUrl);

        // Abrir la URL de test.
        driver.navigate();

        // Maximizar el navegador.
        driver.manage().window().maximize();
    }

    @After
    public void finalize(){
        System.out.println("Check results");
        driver.close();
        driver.quit();
    }

    @Test
    public void startWebDriver(){
        String result = null;
        String msg = null;

        // Obtener el campo de texto "Nombre facultad"
        WebElement TextnombreFacultad = driver
                .findElement(By.id("FacultyName"));
        TextnombreFacultad.sendKeys("Facultad Test");

        // Hacer clic en el botón "CREAR"
        WebElement botonEnviar = driver.findElement(By
                .cssSelector("input.btn.btn-default"));
        botonEnviar.click();

        // Leer y compar el texto resultado.link
        WebElement textoConfirmacion = driver
                .findElement(By.id("flashMessage"));

        String texto = textoConfirmacion.getText();

        // Assert.assertEquals("La facultad se ha creado.", texto, "");


        if("La facultad se ha creado.".equals(texto)){
           // result = TestLinkAPIResults.TEST_PASSED;
        }
    }
}
