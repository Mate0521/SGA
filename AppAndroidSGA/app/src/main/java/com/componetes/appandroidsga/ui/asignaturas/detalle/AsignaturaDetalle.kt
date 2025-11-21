    package com.componetes.appandroidsga.ui.asignaturas.detalle

import android.os.Bundle
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.componetes.appandroid.data.modelo.respuesta.asignaturas.Asignatura
import com.componetes.appandroidsga.R
import com.componetes.appandroidsga.databinding.ActivityAsignaturaDetalleBinding

    class AsignaturaDetalle : AppCompatActivity() {
    private lateinit var binding: ActivityAsignaturaDetalleBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityAsignaturaDetalleBinding.inflate(layoutInflater)
        setContentView(binding.root)

        val asignatura = intent.getSerializableExtra("asignatura") as? Asignatura

        asignatura?.let { cargarDatos(it) }
    }

    private fun cargarDatos(a: Asignatura) {

        binding.txtNombreAsig.text = a.nombre
        binding.txtCarrera.text = a.nombre_car

        binding.txtDuracion.text = "Duración: ${a.duracion}"
        binding.txtCreditosTeoricos.text = "Créditos teóricos: ${a.creditos_teoricos}"
        binding.txtCreditosLab.text = "Créditos laboratorio: ${a.creditos_lab}"

        // Convertimos la lista de IDs a viñetas
        val cursosFormateados = a.curso.joinToString("\n") { "• $it" }
        binding.txtCursos.text = cursosFormateados
    }
}