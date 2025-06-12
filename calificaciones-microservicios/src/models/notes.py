from db import get_connection

def get_all_notes():
    conn = get_connection()
    cursor = conn.cursor(dictionary=True)
    cursor.execute("SELECT * FROM notes")
    notes = cursor.fetchall()
    cursor.close()
    conn.close()
    return notes

def get_note_by_id(note_id):
    conn = get_connection()
    cursor = conn.cursor(dictionary=True)
    cursor.execute("SELECT * FROM notes WHERE id = %s", (note_id,))
    note = cursor.fetchone()
    cursor.close()
    conn.close()
    return note

def create_note(note):
    conn = get_connection()
    cursor = conn.cursor()
    sql = "INSERT INTO notes (courseid, userid, content, format, publishstate) VALUES (%s, %s, %s, %s, %s)"
    cursor.execute(sql, (note['courseid'], note['userid'], note['content'], note['format'], note['publishstate']))
    conn.commit()
    note_id = cursor.lastrowid
    cursor.close()
    conn.close()
    return note_id

def update_note(note_id, note):
    conn = get_connection()
    cursor = conn.cursor()
    sql = "UPDATE notes SET content=%s, format=%s, publishstate=%s WHERE id=%s"
    cursor.execute(sql, (note['content'], note['format'], note['publishstate'], note_id))
    conn.commit()
    cursor.close()
    conn.close()
    return cursor.rowcount

def delete_note(note_id):
    conn = get_connection()
    cursor = conn.cursor()
    cursor.execute("DELETE FROM notes WHERE id=%s", (note_id,))
    conn.commit()
    cursor.close()
    conn.close()
    return cursor.rowcount
