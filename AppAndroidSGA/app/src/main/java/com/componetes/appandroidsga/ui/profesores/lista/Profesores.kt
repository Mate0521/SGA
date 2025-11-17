package com.componetes.appandroid.ui.profesores

import android.content.Intent
import android.os.Bundle
import android.view.View
import android.widget.Toast
import androidx.activity.viewModels
import androidx.appcompat.app.AppCompatActivity
import androidx.recyclerview.widget.LinearLayoutManager
import com.componetes.appandroid.data.modelo.respuesta.profesores.Profesor
import com.componetes.appandroidsga.databinding.ActivityProfesoresBinding
import com.componetes.appandroidsga.ui.profesores.detalle.ProfesorDetalle

class Profesores : AppCompatActivity() {

    private lateinit var binding: ActivityProfesoresBinding
    private val viewModel: ProfesoresVM by viewModels()
    private lateinit var adapter: ProfesoresAdapter


    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        binding = ActivityProfesoresBinding.inflate(layoutInflater)
        setContentView(binding.root)

        // Configurar RecyclerView
        adapter = ProfesoresAdapter { profesor ->
            abrirDetalle(profesor)
        }
        binding.recyclerProfessores.adapter = adapter
        binding.recyclerProfessores.layoutManager = LinearLayoutManager(this)

        // Observers
        viewModel.profesores.observe(this) {
            adapter.submitList(it)
        }

        viewModel.loading.observe(this) { loading ->
            binding.progressBar.visibility =
                if (loading) View.VISIBLE else View.GONE
        }

        viewModel.error.observe(this) {
            Toast.makeText(this, it, Toast.LENGTH_LONG).show()
        }

        // Cargar datos
        viewModel.cargarProfesores()
    }

    private fun abrirDetalle(profesor: Profesor) {
        val intent = Intent(this, ProfesorDetalle::class.java)
        intent.putExtra("profesor", profesor)
        startActivity(intent)
    }
}