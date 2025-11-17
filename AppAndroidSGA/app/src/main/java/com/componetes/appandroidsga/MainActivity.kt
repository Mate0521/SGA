package com.componetes.appandroidsga

import android.content.Intent
import android.os.Bundle
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.componetes.appandroid.ui.Autenticacion
import com.componetes.appandroid.ui.asignaturas.Asignaturas
import com.componetes.appandroid.ui.profesores.Profesores
import com.componetes.appandroidsga.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {

    private lateinit var binding: ActivityMainBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        binding = ActivityMainBinding.inflate(layoutInflater)
        setContentView(binding.root)

        // 4. Configurar los clics de los botones
        configurarListeners()
    }

    private fun configurarListeners() {
        // Listener para el botón "Ver Asignaturas"
        binding.btnAsignatura.setOnClickListener {
            val intent = Intent(this, Asignaturas::class.java)
            startActivity(intent)
        }

        // Listener para el botón "Ver Profesores"
        binding.btnProfesores.setOnClickListener {
            val intent = Intent(this, Profesores::class.java)
            startActivity(intent)
        }

        // Listener para el botón "Login"
        binding.btnLogin.setOnClickListener {
            val intent = Intent(this, Autenticacion::class.java)
            startActivity(intent)
        }
    }
}