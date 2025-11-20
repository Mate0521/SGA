package com.componetes.appandroidsga.ui.informes

import android.os.Bundle
import android.view.View
import android.widget.Toast
import androidx.activity.enableEdgeToEdge
import androidx.activity.viewModels
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import androidx.recyclerview.widget.LinearLayoutManager
import com.componetes.appandroidsga.R
import com.componetes.appandroidsga.databinding.ActivityInfoAlumnoBinding

class InfoAlumno : AppCompatActivity() {
    private lateinit var binding: ActivityInfoAlumnoBinding
    private val viewModel: InfoAlumnoVM by viewModels()
    private lateinit var adapter: CursosAlumnoAdapter

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityInfoAlumnoBinding.inflate(layoutInflater)
        setContentView(binding.root)

        val correo = intent.getStringExtra("EMAIL_ALUMNO") ?: return

        adapter = CursosAlumnoAdapter()
        binding.recyclerCursosAlumno.adapter = adapter
        binding.recyclerCursosAlumno.layoutManager = LinearLayoutManager(this)

        viewModel.alumno.observe(this) { alumno ->
            binding.txtNombreAlumno.text = alumno.nombre
            binding.txtCorreoAlumno.text = alumno.correo
            adapter.submitList(alumno.cursos)
        }

        viewModel.loading.observe(this) {
            binding.progressBar.visibility = if (it) View.VISIBLE else View.GONE
        }

        viewModel.error.observe(this) {
            if (it != null) Toast.makeText(this, it, Toast.LENGTH_LONG).show()
        }

        viewModel.cargarInfo(correo)
    }
}