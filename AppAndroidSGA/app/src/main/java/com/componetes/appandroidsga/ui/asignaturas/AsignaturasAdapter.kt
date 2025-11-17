package com.componetes.appandroid.ui.asignaturas

import android.view.LayoutInflater
import android.view.ViewGroup
import androidx.recyclerview.widget.RecyclerView
import com.componetes.appandroid.data.modelo.respuesta.asignaturas.Asignatura
import com.componetes.appandroidsga.databinding.ItemAsignaturaBinding


class AsignaturasAdapter : RecyclerView.Adapter<AsignaturasAdapter.AsignaturaViewHolder>() {

    private var lista: List<Asignatura> = emptyList()

    fun submitList(data: List<Asignatura>) {
        lista = data
        notifyDataSetChanged()
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): AsignaturaViewHolder {
        val binding = ItemAsignaturaBinding.inflate(
            LayoutInflater.from(parent.context), parent, false
        )
        return AsignaturaViewHolder(binding)
    }

    override fun onBindViewHolder(holder: AsignaturaViewHolder, position: Int) {
        holder.bind(lista[position])
    }

    override fun getItemCount(): Int = lista.size

    class AsignaturaViewHolder(private val binding: ItemAsignaturaBinding ) :
        RecyclerView.ViewHolder(binding.root) {

        fun bind(asig: Asignatura) {
            binding.txtNombre.text = asig.nombre
            binding.txtCarrera.text = "Carrera: ${asig.nombre_car}"
            binding.txtDuracion.text = "Duración: ${asig.duracion} meses"
            binding.txtCreditos.text =
                "Créditos: Teo ${asig.creditos_teoricos} / Lab ${asig.creditos_lab}"
        }
    }
}