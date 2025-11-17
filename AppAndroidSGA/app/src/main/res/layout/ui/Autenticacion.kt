package com.componetes.appandroid.ui

import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.Toast
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import androidx.lifecycle.ViewModelProvider
import com.componetes.appandroid.R

class Autenticacion : AppCompatActivity() {
    private lateinit var viewModel: AutenticacionVM

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_autenticacion)

        viewModel = ViewModelProvider(this).get(AutenticacionVM::class.java)

        val email = findViewById<EditText>(R.id.edtEmail)
        val password = findViewById<EditText>(R.id.edtPassword)
        val btnLogin = findViewById<Button>(R.id.btnLogin)

        btnLogin.setOnClickListener {
            val correo = email.text.toString()
            val pass = password.text.toString()
            viewModel.login(correo, pass)
        }

        viewModel.resultado.observe(this) { resultado ->
            resultado.onSuccess {
                Toast.makeText(this, "Login correcto", Toast.LENGTH_SHORT).show()
                // Navegar a siguiente pantalla
            }
            resultado.onFailure {
                Toast.makeText(this, it.message ?: "Error", Toast.LENGTH_LONG).show()
            }
        }
    }
}