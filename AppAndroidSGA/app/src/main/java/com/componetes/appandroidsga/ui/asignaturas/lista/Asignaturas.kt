package com.componetes.appandroid.ui.asignaturas

import android.content.Intent
import android.os.Bundle
import android.view.View
import android.widget.Toast
import androidx.activity.viewModels
import androidx.appcompat.app.AppCompatActivity
import androidx.recyclerview.widget.LinearLayoutManager
import com.componetes.appandroid.data.modelo.respuesta.asignaturas.Asignatura
import com.componetes.appandroidsga.databinding.ActivityAsignaturasBinding
import com.componetes.appandroidsga.ui.asignaturas.detalle.AsignaturaDetalle


class Asignaturas : AppCompatActivity() {

    private lateinit var binding: ActivityAsignaturasBinding
    private val viewModel: AsiganaturaVM by viewModels()
    private lateinit var adapter: AsignaturasAdapter

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityAsignaturasBinding.inflate(layoutInflater)
        setContentView(binding.root)

        // Crear adapter con callback
        adapter = AsignaturasAdapter { asignatura ->
            abrirDetalle(asignatura)
        }

        binding.recyclerAsignaturas.adapter = adapter
        binding.recyclerAsignaturas.layoutManager = LinearLayoutManager(this)

        // Observers
        viewModel.asignaturas.observe(this) {
            adapter.submitList(it)
        }

        viewModel.loading.observe(this) {
            binding.progressBar.visibility = if (it) View.VISIBLE else View.GONE
        }

        viewModel.error.observe(this) {
            if (it != null) Toast.makeText(this, it, Toast.LENGTH_LONG).show()
        }

        // Cargar data
        viewModel.cargarAsignaturas()
    }

    private fun abrirDetalle(asignatura: Asignatura) {
        val intent = Intent(this, AsignaturaDetalle::class.java)
        intent.putExtra("asignatura", asignatura)
        startActivity(intent)
    }
}