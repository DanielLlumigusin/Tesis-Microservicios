package ec.edu.usuarios.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import ec.edu.usuarios.model.AttendanceMark;

import java.util.List;

@Repository
public interface AttendanceMarkRepository extends JpaRepository<AttendanceMark, Long> {
    List<AttendanceMark> findBySessionId(Long sessionId);
    List<AttendanceMark> findByUserId(Long userId);
}