package com.componetes.appandroidsga.ui.profesores.detalle

import android.os.Bundle
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.componetes.appandroid.data.modelo.respuesta.profesores.Profesor
import com.componetes.appandroidsga.R
import com.componetes.appandroidsga.databinding.ActivityProfesorDetalleBinding

class ProfesorDetalle : AppCompatActivity() {
    private lateinit var binding: ActivityProfesorDetalleBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityProfesorDetalleBinding.inflate(layoutInflater)
        setContentView(binding.root)

        val profesor = intent.getSerializableExtra("profesor") as? Profesor

        profesor?.let { cargarDatos(it) }
    }

    private fun cargarDatos(p: Profesor) {
        binding.txtNombre.text = p.nombre
        binding.txtAreaDepto.text = "${p.area} - ${p.departamento}"
        binding.txtCorreo.text = "Correo: ${p.correo}"
        binding.txtTelefono.text = "Teléfono: ${p.telefono}"

        // Convertimos la lista de cursos a un texto con viñetas
        val cursosFormateados = p.cursos.joinToString("\n") { "• $it" }
        binding.txtCursos.text = cursosFormateados
    }
}