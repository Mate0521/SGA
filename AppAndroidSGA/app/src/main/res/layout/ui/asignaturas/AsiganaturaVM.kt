package com.componetes.appandroid.ui.asignaturas

import androidx.lifecycle.LiveData
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import com.componetes.appandroid.data.modelo.respuesta.asignaturas.Asignatura
import com.componetes.appandroid.repository.AsiganturaRepository
import kotlinx.coroutines.launch


class AsiganaturaVM: ViewModel() {
    private val repository = AsiganturaRepository()

    private val _asignaturas = MutableLiveData<List<Asignatura>>()
    val asignaturas: LiveData<List<Asignatura>> get() = _asignaturas

    private val _loading = MutableLiveData<Boolean>()
    val loading: LiveData<Boolean> get() = _loading

    private val _error = MutableLiveData<String>()
    val error: LiveData<String> get() = _error

    fun cargarAsignaturas() {
        viewModelScope.launch {
            try {
                _loading.value = true
                val data = repository.obtenerAsignaturas()
                _asignaturas.value = data
            } catch (e: Exception) {
                _error.value = e.message
            } finally {
                _loading.value = false
            }
        }
    }

}